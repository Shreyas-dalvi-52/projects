import java.awt.*;
import java.applet.*;
class gridbag
{
	public static void main(String[] args) {
		
	
	Frame f=new Frame("gridbagLayout");
	GridBagLayout gb = new GridBagLayout();
	f.setLayout(gb);
	GridBagConstarints gbc=new GridBagConstarints();
	gbc.fill=GridBagConstarints.HORIZONTAL;
	gbc.gridx=0;
	gbc.gridy=0;
	Button b1=new Button("Button one");
	f.add(b1,gbc);
}
}